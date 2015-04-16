===
UPS
===

The management of an uninterruptible power supply (UPS - Uninterruptible Power
Supply) connected to the server is assigned to NUT (Network UPS Tools), which
will carry out a shutdown in case of absence of
power. NUT supports different models of UPS,
connected by serial cable or USB.

In this panel you perform the configuration of NUT, to
see UPS data, use the Dashboard.

Enable NUT UPS
    Enable or disable the NUT service.

Mode
========

Master
    This mode should be selected if the UPS is connected
    to the server directly via serial or USB cable.

Search drivers for model
    Allows you to search for a driver compatible with your UPS model. After selecting the model from the list,
    the *Driver* field will be filled out with the name of the appropriate driver.

Driver
    The driver to be used for the model of UPS connected.

Device
    The physical port where the UPS is connected. Inside brackets is displayed the UNIX device name, in case of USB connection
    the device name is automatically calculated.

Slave
    This mode should be used if the UPS is not connected
    directly to the server, but to another server configured with NUT
    in Master mode to which server will connect.

Address of the master server
    IP address or host name of the master server. The client will use the user * UPS * to connect to the master server.
    Make sure that the user is configured on the master server.

Password
    The password you specify here is the one configured on the master server
    for slave connections.
