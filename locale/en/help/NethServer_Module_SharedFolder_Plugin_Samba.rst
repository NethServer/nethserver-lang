.. --initial-header-level=3 

Samba
^^^^^ 

Samba provides file and printer sharing to client SMB/CIFS (Windows
File and Printer Sharing).

Enable Samba 
     Enables access as a "shared folder" of Windows.

Network Recycle Bin 
     Collects files deleted by this shared folder, so similar to the
     Windows Recycle Bin.

Keep files of the same name 
     If two files of the same name, they remain distinct in trash. By
     disabling this option, the last one overwrites the previous year.

Guest Access 
     A *guest user* is a user whose identification is failed because
     it did not provide credentials or has provided incorrect. For
     users or devices that act in this mode, you can grant the
     following permissions:

     * None 
     * Read-only 
     * Read and write
