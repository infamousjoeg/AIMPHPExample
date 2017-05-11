# AIMPHPExample

AIMPHPExample is an example of how to securely retrieve credentials from CyberArk's Enterprise Password Vault (EPV) by using CyberArk's Application Identity Manager (AIM) Centralized Credential Provider (CCP) which supports REST and SOAP.

  - Uses CURL in PHP for requests
  - Returns simple JSON-formatted key/value

# New Features!

  - Added -insecure switch to CURL request for testing purposes
  - Fully commented for your viewing pleasure

Markdown is a lightweight markup language based on the formatting conventions that people naturally use in email.  As [John Gruber] writes on the [Markdown site][df1]

> The overriding design goal for Markdown's
> formatting syntax is to make it as readable
> as possible. The idea is that a
> Markdown-formatted document should be
> publishable as-is, as plain text, without
> looking like it's been marked up with tags
> or formatting instructions.

This text you see here is *actually* written in Markdown! To get a feel for Markdown's syntax, type some text into the left window and watch the results in the right.

### Testing

AIMPHPExample was tested on the following configuration:

* WAMPServer - Windows, Apache, MySQL, PHP All-in-One Server
* Enterprise Password Vault (EPV) version 9.9
* Application Identity Manager (AIM) Centralized Credential Provider (CCP) version 9.9

### Todos

 - Create output to HTML body instead of JSON-formatted echo
 - Add to SkyTap Gold Demo