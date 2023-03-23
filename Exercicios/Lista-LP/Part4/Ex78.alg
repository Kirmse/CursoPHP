algoritmo "semnome"

Var
   nomes: vetor[1..10] de caractere
   nomeBusca: caractere
   encontrado: logico
   i: inteiro

Inicio
   Para i de 1 ate 10 faca
      Escreva("Digite o nome ", i, ": ")
      Leia(nomes[i])
   FimPara

   Escreva("Digite o nome a ser buscado: ")
   Leia(nomeBusca)

   encontrado := falso
   Para i de 1 ate 10 faca
      Se nomes[i] = nomeBusca entao
         encontrado := verdadeiro
         Pare
      FimSe
   FimPara

   Se encontrado entao
      Escreva("ACHEI")
   Senao
      Escreva("NÃO ACHEI")
   FimSe
FimAlgoritmo
