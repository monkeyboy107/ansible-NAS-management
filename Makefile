PLAYCMD=ansible-playbook nas.yaml

deploy:
	@cd ansible; $(PLAYCMD)
only:
	@cd ansible; $(PLAYCMD) --skip=always --tags=${tag}
with-backup:
	@cd ansible; $(PLAYCMD) --extra-vars=backup
clean:
	@rm -rf ansible/.facts
edit-secrets:
	@if [ ! -f ~/.vault_pass ]; \
	then \
	  echo "Please create '~/.vault_pass' to decrypt 'ansible/group_vars/all/secrets.yaml'"; \
	  exit 1; \
	fi; \
	ansible-vault edit ansible/group_vars/all/secrets.yaml --vault-password-file=~/.vault_pass
