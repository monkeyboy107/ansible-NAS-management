deploy:
	@cd ansible; ansible-playbook nas.yaml
with-backup:
	@cd ansible; ansible-playbook nas.yaml --extra-vars=backup
edit-secrets:
	@if [ ! -f ~/.vault_pass ]; \
	then \
	  echo "Please create '~/.vault_pass' to decrypt 'ansible/group_vars/all/secrets.yaml'"; \
	  exit 1; \
	fi; \
	ansible-vault edit ansible/group_vars/all/secrets.yaml --vault-password-file=~/.vault_pass
