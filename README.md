# Projeto de Criptografia em PHP

Este projeto demonstra como utilizar diferentes métodos de criptografia em PHP, incluindo MD5, SHA1 e PASSWORD_HASH. Ele permite que os usuários insiram uma string, escolham um método de criptografia e vejam o resultado criptografado. Além disso, o projeto permite verificar se uma string corresponde a um hash gerado com `password_hash`.

## Funcionalidades

- Criptografar uma string usando MD5, SHA1 ou PASSWORD_HASH.
- Verificar uma string contra um hash gerado com `password_hash`.

## Como usar

1. Clone este repositório para sua máquina local.
2. Abra o arquivo `index.php` em um servidor web compatível com PHP.
3. Insira uma string no campo de texto.
4. Selecione o método de criptografia desejado.
5. Clique em "Criptografar" para ver a string criptografada.
6. Se o método `PASSWORD_HASH` for selecionado, um campo adicional aparecerá para verificar a string original contra o hash.

## Requisitos

- PHP 7.4 ou superior
- Servidor web (Apache, Nginx, etc.)

## Exemplo de Uso

1. Digite "exemplo" no campo de texto.
2. Selecione o método de codificação e clique em "Criptografar".
3. O resultado será a string "exemplo" criptografada.

## Autor

Desenvolvido por Eduardo Gimenez, 2024.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).
