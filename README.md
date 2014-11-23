zotero_dataserver_ansible
=========================

An ansible project which sets up a complete working zotero sync server on ubuntu.

Better description coming soon.

Run all: ansible-playbook main.yml -i hosts -k -K
Run some parts: ansible-playbook main.yml -i hosts -k -K --tags='apt,zotero'


Credits:

https://groups.google.com/forum/#!forum/zotero-dev

https://github.com/sualk/dataserver/wiki/Installation-Instructions-for-Debian-Wheezy

https://github.com/hoehnp/zotero_installation/

http://signalverarbeitung.blogspot.ch/2012/08/zotero-data-server-installation.html
