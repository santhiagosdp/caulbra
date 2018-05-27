openssl genrsa -des3 -out titular/private/santhiago.key 1024

openssl req -extensions v3_ca -config ca/openssl.conf -new -x509 -days 365 -key ca/caulbra.key -out titular/cer/santhiago.cer

openssl req -new -config ca/openssl.conf -key titular/private/santhiago.key -out titular/csr/santhiago.csr

openssl ca -config ca/openssl.conf -extensions v3_ca -days 365 -in titular/csr/santhiago.csr -notext -out titular/crt/santhiago.crt

openssl pkcs12 -export -out titular/certs_pfx/santhiago.pfx -inkey titular/private/santhiago.key -in titular/crt/santhiago.crt -certfile ca/caulbra.crt