## Sobre o projeto

**Escopo do projeto**: O projeto tem o escopo simulado em um sistema de gerenciamento de revendas de automóveis tendo a maioria de suas funcionalidades especificadas neste documento.

**Tecnologias**: Laravel 8 + Vue 2 + Postgres;

## O projeto

O cliente Jesus Da Silva da empresa Carro e CIA possui uma grande dificuldade em gerenciar os carros que a sua empresa possui. Através dos papéis que ele utiliza diariamente, ele está suscetível a: extravio das folhas, danos causados pela água, e consequentemente mofo, desgaste com o tempo, etc. Para solucionar esse problema ele solicitou a criação de um software. Jesus quer que seja elaborado um sistema web de gerenciamento de automóveis, tendo a possibilidade de realizar o cadastro e possuir diferentes logins no sistema para que todos os seus funcionários tenham a possibilidade de logar no mesmo. Ele solicitou também que o sistema possua uma dashboard exibindo gráficos de cunho informativo sobre as ações realizadas dentro do sistema para que seus funcionários, e ele, acompanhem o andamento da empresa. Obviamente, para isso, deve existir a possibilidade de cadastro de automóveis assim como a visualização dos itens cadastrados em forma de lista.

## User Story

- **Login**: Eu como usuário desejo poder acessar o sistema, através de uma tela de login com campos (nome/email e senha). (Não esquecer a segurança desta etapa);
- **Cadastro de usuários**: Eu como usuário ao identificar que não possuo conta, desejo fazer o cadastro na mesma tela de login sem ter a necessidade de navegar para fora dessa, fornecendo apenas informações necessárias. (dados básicos de pessoa);
- **Dashboard**: Eu como usuário desejo ter acesso a uma dashboard com relatório(s) do sistema com informações referentes às ações realizadas no sistema. (Escolher quais, quantos e como exibir essas infos);
- **CRUD de cadastro de carro**: Eu como usuário desejo ter a possibilidade de cadastrar, editar, visualizar e remover um carro no sistema. (Observar a quantidade mínima de cinco campos);
- **Lista**: Eu como usuário desejo visualizar todos carros cadastrados no sistema em forma de lista junto de botões de ação em cada item dessa lista para que eu possa tomar ações rápidas. Também desejo clicar no automóvel da lista para visualizar mais informações. (Escolher quais informações, quantos e como exibir nesta lista);
- **Busca de carros**: Eu como usuário quero ter a possibilidade de realizar uma busca por carros para que eu encontre de forma mais simples e rápida o que eu desejo. (Escolher como realizar e o que filtrar nessa busca);
- **Histórico**: Eu como usuário desejo acessar o histórico de alterações dos respectivos automóveis, para que eu saiba rapidamente quando e o que foi feito. (Escolher quais informações e como será exibido esse histórico);

### Configuração

```
- composer install
- npm install
- cp .env.example .env
- php artisan key:generate
- php artisan migrate
```

### Rodar localmente

```
- php artisan serve
- npm run dev
```
