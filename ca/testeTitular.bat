openssl genrsa -des3 -out titular/private/testebat.key 1024

openssl req -extensions v3_ca -config ca/openssl.conf -new -x509 -days 365 -key ca/caulbra.key -out titular/cer/testebat.cer

openssl req -new -config ca/openssl.conf -key titular/private/testebat.key -out titular/csr/testebat.csr

openssl ca -config ca/openssl.conf -extensions v3_ca -days 365 -in titular/csr/testebat.csr -notext -out titular/crt/testebat.crt

openssl pkcs12 -export -out titular/certs_pfx/testebat.pfx -inkey titular/private/testebat.key -in titular/crt/testebat.crt -certfile ca/caulbra.crt