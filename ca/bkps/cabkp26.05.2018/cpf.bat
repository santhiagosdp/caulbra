cd C:\xampp\htdocs\docs\Estagio\caulbra\ca

cpfpass=titular

openssl genrsa -des3 -passout pass:titular -out titular/private/netq.key 2048


PS C:\xampp\htdocs\docs\Estagio\caulbra\ca> openssl req -extensions v3_ca -config ca/openssl.conf -new -x509 -days 365 -
key ca/caulbra.key -out titular/pub.cer -passin pass:1111
You are about to be asked to enter information that will be incorporated
into your certificate request.
What you are about to enter is what is called a Distinguished Name or a DN.
There are quite a few fields but you can leave some blank
For some fields there will be a default value,
If you enter '.', the field will be left blank.
-----
Nome: []:santhiago
Email: []:
Pais (ex. BR): [BR]:
Estado (ex. TO) []:
Cidade (ex. Palmas) []:
Empresa (ex. Ulbra) []:
Setor na empresa (ex. informatica) []:
PS C:\xampp\htdocs\docs\Estagio\caulbra\ca> 

openssl req -extensions v3_ca -config ca/openssl.conf -new -x509 -days 365 - key ca/caulbra.key -out titular/pub.cer -passin pass:1111 -subj "/CN=examplebrooklyn"
