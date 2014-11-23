Run all: 
    ansible-playbook main.yml -i hosts -k -K

Run some parts: 
    ansible-playbook main.yml -i hosts -k -K --tags='apt,zotero' 
