cd C:/xampp/htdocs/docs/Estagio/caulbra/ca

openssl genrsa -des3 -out ca/caulbra.key 1024

openssl req -extensions v3_ca -config ca/openssl.conf -new -x509 -days 3650 -key ca/caulbra.key -out ca/caulbra.cer

openssl pkcs12 -export -out ca/caulbra.pfx -in ca/caulbra.cer -inkey ca/caulbra.key

openssl req -config ca/openssl.conf -new -key ca/caulbra.key -out ca/caulbra.csr

openssl ca -config ca/openssl.conf -extensions v3_ca -days 3650 -in ca/caulbra.csr -notext -out ca/caulbra.crt