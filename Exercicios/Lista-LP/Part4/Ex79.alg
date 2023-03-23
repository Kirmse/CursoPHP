algoritmo "semnome"

Var
   notas: vetor[1..20] de real
   media: real
   acimaMedia: inteiro
   soma: real
   i: inteiro

Inicio
   Para i de 1 ate 20 faca
      Escreva("Digite a nota do aluno ", i, ": ")
      Leia(notas[i])
   FimPara

   soma := 0
   Para i de 1 ate 20 faca
      soma := soma + notas[i]
   FimPara
   media := soma / 20

   acimaMedia := 0
   Para i de 1 ate 20 faca
      Se notas[i] > media entao
         acimaMedia := acimaMedia + 1
      FimSe
   FimPara

   Escreva("A média da turma é: ", media)
   Escreva(acimaMedia, " alunos obtiveram nota acima da média.")
FimAlgoritmo
