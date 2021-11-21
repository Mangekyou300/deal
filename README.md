## Atualizações 20/11/2021 - Aurélio Silva de Jesus

É importante anotarmos um pro outro as mudanças que fizemos

# Agora é só é possível utilizar o sistema por meio de autenticação

Foram realizadas as seguintes alterações no código:

- Adição da tabela "perfils" no banco de dados
- Ligação da tabela "perfils" com a tabela "users" por meio da chave estrangeira em "perfils"
- criação de Seeders para a confecção automática de um usuário administrador
- Implantação e estilização das rotas de autenticação

# IMPORTANTE

- Atualize seu banco de dados utilizando o comando ** php artisan migrate:fresh --seed **.
- Caso algo dê errado, utilize o comando composer dumpautoload, depois tente atualizar novamente


## Atualizações dd/mm/2021 - Aurélio Silva de Jesus

Essa atualização foi 100% focada no perfil do usuário, portanto agora o sistema é capaz de:

- Retornar a página de criação de perfil correta, com base no tipo do usuário
- Retornar a página de visualização de perfil correta, com base no tipo do usuário
