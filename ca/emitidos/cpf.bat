cd C:\xampp\htdocs\docs\Estagio\caulbra\ca

mkdir titular

openssl genrsa -des3 -passout pass:1111 -out titular/priv.key 2048

openssl req -new -config ca/openssl.conf -key titular/priv.key -out titular/req.csr -passin pass:1111 -subj "/C=BR/ST=TO/L=Palmas/O=Ulbra Company/CN=santhiago"

openssl ca -extensions v3_ca -days 365 -in titular/req.csr -out titular/pub.cert -passin pass:1111 -config ca/openssl.conf -batch  

openssl pkcs12 -export -out titular/parawindows.pfx -inkey titular/priv.key -in titular/pub.cert -certfile ca/caulbra.crt -passout pass:1111 -passin pass:1111

winrar a emitidos/20180608.rar titular/*.*
rmdir /s /q titular