# Desafio de Programação Academia Capgemini



## Começando

​	

​	Para executar o projeto, será necessário instalar o servidor de aplicação **APACHE** o banco de dados **MySQL**, e o **GIT BASH** para clonarmos a aplicação do GitHub, segue abaixo o link para download da distribuição apache contendo as ferramentas acima citadas, mas link para fazer o download do git bash.

* ([Download XAMPP (apachefriends.org)](https://www.apachefriends.org/pt_br/download.html)) 

* ([Git - Downloads (git-scm.com)](https://git-scm.com/downloads))

  

## Desenvolvimento



- #### Clonando a Aplicação

​	

​	Para iniciar o desenvolvimento, é necessário  criar uma pasta dentro do diretório **./htdocs**  com o nome que desejar, como no exemplo abaixo:

```
C:\xampp\htdocs\capgemini 
```

​	Dentro da pasta criada, clique com o botão direito do mouse e selecione a opção **Git Bash Here**:

![image-20210510105150179](C:\Users\jieff\AppData\Roaming\Typora\typora-user-images\image-20210510105150179.png)

​	A partir desse momento iremos criar nosso repositório local e clonar a nossa aplicação:

```
$ git init 
```

​	A primeira coisa que você deve fazer ao instalar Git é configurar seu nome de usuário e endereço de e-mail. Isto é importante porque cada *commit* usa esta informação, e ela é carimbada de forma imutável nos *commits* que você começa a criar:

```
$ git config --global user.name "Fulano de Tal"
$ git config --global user.email fulanodetal@exemplo.br
```

​	Vamos clonar nossa aplicação com o comando abaixo:

```
$ git clone https://github.com/jieff/Cadastro-Anuncios-2-Etapa-Capgemini.git
```



- #### Iniciando o Servidor Apache e o SGBD MySQL

  Com o XAMPP instalado, inicie os serviços conforme imagem abaixo: 

  

  ![image-20210510152701944](C:\Users\jieff\AppData\Roaming\Typora\typora-user-images\image-20210510152701944.png)

- #### Importando a Base de Dados

  

  ​	Para importa a nossa base de dados da nossa aplicação precisamos acessar o nosso SGBD MySQL através do endereço abaixo em um navegador de sua preferência:

  ```
  http://localhost/phpmyadmin/
  ```

  ​	Localize a aba **importar** na parte superior do phpMyAdmin, mais abaixo o botão **Escolher Arquivo**, e procure na raiz do nosso projeto o arquivo **base.db**, em seguida clique no botão **Executar** no canto direito inferior da nossa imagem.  

  ![*](C:\Users\jieff\AppData\Roaming\Typora\typora-user-images\image-20210510154412612.png)**Parabéns!!!** Agora só precisa ir até o navegador de preferência e digitar a seguinte url:

  ```
  http://localhost/capgemini/
  ```

  

## Recursos

​     Inicialmente o sistema permite cadastrar anúncios, com os campos nome do anúncio, cliente, data de inicio e data de termino, realizar consultas dos anúncios cadastrados e fornecer um relatório contendo o valor investido, a quantidade máxima de visualizações, quantidade máxima de cliques e quantidade máxima de compartilhamentos. Os relatórios poderão ser filtrados por intervalo de tempo e cliente.     

## Contribuições

Contribuições são sempre bem-vindas!

## Links







