#! /bin/sh
cd /var/log
#limpa arquivos compactados
rm *.gz
# cria lista de todos os arquivos de log que serao limpos
lista=`find -type f`
# executa a limpeza dos logs
for i in $lista
do
echo -n >$i &>/dev/null
echo Zerando arquivo $i...
done

