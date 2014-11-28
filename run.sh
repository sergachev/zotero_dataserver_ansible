#!/bin/bash
export ANSIBLE_HOST_KEY_CHECKING=False
ansible-playbook main.yml -i hosts -k -K
