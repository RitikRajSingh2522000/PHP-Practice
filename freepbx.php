<?php

// Asterisk AMI credentials
$amiUsername = "your_username";
$amiPassword = "your_password";
$amiHost = "127.0.0.1";  // Replace with the IP address of your FreePBX server
$amiPort = "5038";       // Default AMI port

// Numbers to dial
$callerNumber = "1000";         // Replace with the extension or phone number of the caller phone
$destinationNumber = "2000";    // Replace with the extension or phone number of the destination phone

// Function to initiate the call
function initiateCall($amiUsername, $amiPassword, $amiHost, $amiPort, $callerNumber, $destinationNumber) {
    // Connect to Asterisk AMI
    $socket = fsockopen($amiHost, $amiPort, $errno, $errstr, 10);
    if (!$socket) {
        echo "Error connecting to Asterisk Manager Interface: $errstr ($errno)\n";
        return;
    }
    
    // Login to AMI
    fputs($socket, "Action: Login\r\n");
    fputs($socket, "Username: $amiUsername\r\n");
    fputs($socket, "Secret: $amiPassword\r\n\r\n");

    // Wait for response
    while (!feof($socket)) {
        $response = fgets($socket);
        if (strpos($response, "Message: Authentication accepted") !== false) {
            break;
        } elseif (strpos($response, "Response: Error") !== false) {
            echo "Error: Authentication failed\n";
            fclose($socket);
            return;
        }
    }

    // Originate call
    fputs($socket, "Action: Originate\r\n");
    fputs($socket, "Channel: SIP/$callerNumber\r\n");
    fputs($socket, "Exten: $destinationNumber\r\n");
    fputs($socket, "Context: from-internal\r\n");
    fputs($socket, "Priority: 1\r\n");
    fputs($socket, "CallerID: Auto Dialer <$callerNumber>\r\n");
    fputs($socket, "Timeout: 30000\r\n\r\n");

    fclose($socket);
}

// Function to monitor call status
function monitorCall($amiUsername, $amiPassword, $amiHost, $amiPort, $callerNumber, $destinationNumber) {
    // Connect to Asterisk AMI
    $socket = fsockopen($amiHost, $amiPort, $errno, $errstr, 10);
    if (!$socket) {
        echo "Error connecting to Asterisk Manager Interface: $errstr ($errno)\n";
        return;
    }

    // Login to AMI
    fputs($socket, "Action: Login\r\n");
    fputs($socket, "Username: $amiUsername\r\n");
    fputs($socket, "Secret: $amiPassword\r\n\r\n");

    // Wait for response
    while (!feof($socket)) {
        $response = fgets($socket);
        if (strpos($response, "Message: Authentication accepted") !== false) {
            break;
        } elseif (strpos($response, "Response: Error") !== false) {
            echo "Error: Authentication failed\n";
            fclose($socket);
            return;
        }
    }

    // Monitor call status
    while (!feof($socket)) {
        $response = fgets($socket);
        if (strpos($response, "Event: Dial") !== false) {
            if (strpos($response, "ConnectedLineNum: $destinationNumber") !== false) {
                // Call answered by destination number, initiate call back to caller number
                echo "Call answered by $destinationNumber. Initiating call back to $callerNumber.\n";
                fputs($socket, "Action: Originate\r\n");
                fputs($socket, "Channel: SIP/$destinationNumber\r\n");
                fputs($socket, "Exten: $callerNumber\r\n");
                fputs($socket, "Context: from-internal\r\n");
                fputs($socket, "Priority: 1\r\n");
                fputs($socket, "CallerID: Auto Dialer <$destinationNumber>\r\n");
                fputs($socket, "Timeout: 30000\r\n\r\n");
                break;  // Exit loop once call back is initiated
            }
        }
    }

    fclose($socket);
}

// Main function
function main($amiUsername, $amiPassword, $amiHost, $amiPort, $callerNumber, $destinationNumber) {
    // Initiate the call
    initiateCall($amiUsername, $amiPassword, $amiHost, $amiPort, $callerNumber, $destinationNumber);

    // Monitor call status
    monitorCall($amiUsername, $amiPassword, $amiHost, $amiPort, $callerNumber, $destinationNumber);
}

// Execute the main function
main($amiUsername, $amiPassword, $amiHost, $amiPort, $callerNumber, $destinationNumber);

?>
