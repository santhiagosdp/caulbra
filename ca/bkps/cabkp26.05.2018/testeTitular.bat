cd C:\xampp\htdocs\docs\Estagio\caulbra\ca

openssl genrsa -des3 -out titular/private/Santhiago04496584140.key 1024

openssl req -extensions v3_ca -config ca/openssl.conf -new -x509 -days 365 -key ca/caulbra.key -out titular/cer/Santhiago04496584140.cer

openssl req -new -config ca/openssl.conf -key titular/private/Santhiago04496584140.key -out titular/csr/Santhiago04496584140.csr

openssl ca -config ca/openssl.conf -extensions v3_ca -days 365 -in titular/csr/Santhiago04496584140.csr -notext -out titular/crt/Santhiago04496584140.crt

openssl pkcs12 -export -out titular/certs_pfx/Santhiago04496584140.pfx -inkey titular/private/Santhiago04496584140.key -in titular/crt/Santhiago04496584140.crt -certfile ca/caulbra.crt