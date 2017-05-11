# AIMPHPExample

AIMPHPExample is an example of how to securely retrieve credentials from CyberArk's Enterprise Password Vault (EPV) by using CyberArk's Application Identity Manager (AIM) Centralized Credential Provider (CCP) which supports REST and SOAP.

  - Uses CURL in PHP for requests
  - Returns simple JSON-formatted key/value

# New Features!

  - Added -insecure switch to CURL request for testing purposes
  - Fully commented for your viewing pleasure

### Testing

AIMPHPExample was tested on the following configuration:

* WAMPServer - Windows, Apache, MySQL, PHP All-in-One Server
* Enterprise Password Vault (EPV) version 9.9
* Application Identity Manager (AIM) Centralized Credential Provider (CCP) version 9.9

### Todos

 - Create output to HTML body instead of JSON-formatted echo
 - Add to SkyTap Gold Demo