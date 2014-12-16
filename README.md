zotero_dataserver_ansible
=========================

An ansible project which sets up a complete working zotero sync server on ubuntu.

Note: by default, a self-signed SSL certificate will be created and used by apache server.
You can change this by editing 'roles/preconf/templates/zotero.conf'.

## How to use:

1. Install ubuntu onto target server, install ssh server there.
2. Install ansible anywhere (can be your own computer or target server), clone this repository onto same machine.
2. Edit admin login name, mysql login data, hostname in file 'group_vars/all'
3. Specify target server address in 'hosts' (can be localhost as well)
4. Use run.sh, watch the output
5. Add users (description coming)
6. Download custom built client from target server (description coming)
7. Run client, close it (local profile will be created), add SSL certificate exception into client (described below, should be automated later)

## How to whitelist a self-signed SSL certificate in zotero client:

https://www.zotero.org/support/kb/cert_override


## Credits:

https://www.zotero.org/

https://groups.google.com/forum/#!forum/zotero-dev

https://github.com/sualk/dataserver/wiki/Installation-Instructions-for-Debian-Wheezy

https://github.com/hoehnp/zotero_installation/

http://signalverarbeitung.blogspot.ch/2012/08/zotero-data-server-installation.html





