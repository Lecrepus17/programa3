cd C:\xampp\htdocs\programa3
composer create-project laravel/laravel nome-da-pasta
cd nome-da-pasta
php artisan serve

clonando em outra maquina
 composer install
 cp .env.example .env
 php artisan key:generate 
 php artisan serve


app 
tudo que programos na pasta app

config
configurações

Códigos
ctrl + p para pesquisar arquivo


criar um controller // model
php artisan make:controller ProdutosController

criar uma migration // banco
php artisan make:migration create_produtos_table
// crie banco .env 
php artisan migrate
php artisan migrate:refresh
php artisan migrate:rollback


// criar model
php artisan make:model Produto

// tradução de mensagens
// extrai arquivos lang/en
php artisan lang:publish
// instalar pacote de lingua traduzido
composer require lucascudo/laravel-pt-br-localization --dev
php artisan vendor:publish --tag=laravel-pt-br-localization


-----------------------------------------------------------------------------
salvando extenções

No Visual Studio Code, você pode gerar um arquivo com a lista de extensões instaladas usando o seguinte comando na linha de comando:

code --list-extensions > extensions.txt

Esse comando lista todas as extensões instaladas e salva o resultado no arquivo "extensions.txt". Você pode salvar esse arquivo em um 
local seguro, como um pendrive ou um serviço de armazenamento em nuvem, para usar em outra máquina. Para instalar as extensões em outra máquina, 
basta copiar o arquivo "extensions.txt" para a máquina desejada e executar o seguinte comando na linha de comando:

// se for windows
Get-Content extensions.txt | ForEach-Object { code --install-extension $_ }
// se for ubuntu
cat extensions.txt | xargs -I {} code --install-extension {}


Esse comando instala as extensões listadas no arquivo "extensions.txt" usando o comando "code --install-extension" para cada extensão. Dessa forma, 
você pode instalar todas as extensões de uma só vez em outra máquina.


Para escrever as extensões no arquivo, você pode abrir o Visual Studio Code e acessar a lista de extensões instaladas. Para isso, siga os seguintes passos:

Abra o Visual Studio Code
Clique em "Extensions" no menu lateral esquerdo ou pressione "Ctrl+Shift+X" no Windows/Linux ou "Cmd+Shift+X" no macOS.
Procure por todas as extensões que você deseja listar e instalar em outra máquina.
Clique na extensão desejada para abrir a página de detalhes da extensão.
Na página de detalhes da extensão, clique no botão "Copy Extension ID" para copiar o ID da extensão para a área de transferência.
Depois de copiar o ID da extensão, abra o arquivo "extensions.txt" em um editor de texto e cole o ID da extensão em uma nova linha. Certifique-se de que cada ID de extensão esteja em uma linha separada. Salve o arquivo após adicionar todas as extensões desejadas.

Agora, você pode usar o arquivo "extensions.txt" para instalar as extensões em outra máquina, seguindo as instruções que eu forneci na minha resposta anterior.


----------------------------------------------------------------------------------------------------------------------




Especificações
Nome do dispositivo	LAB5-13568
Nome completo do dispositivo	LAB5-13568.bento.local
Processador	Intel(R) Core(TM) i5-9500 CPU @ 3.00GHz   3.00 GHz
RAM instalada	8,00 GB (utilizável: 7,79 GB)
ID do dispositivo	3428D1DB-F566-4E06-878E-926B86B4B4EC
ID do Produto	00330-53319-88039-AAOEM
Tipo de sistema	Sistema operacional de 64 bits, processador baseado em x64
Caneta e toque	Nenhuma entrada à caneta ou por toque disponível para este vídeo



-------------------------------------------------------------------------------------------------------


extension pack blade tem que adicionar codigo
