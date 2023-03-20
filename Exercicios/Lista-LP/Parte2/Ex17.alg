algoritmo "semnome"

var
n1, n2, media : real

inicio

escreval("Média de notas")
escreva("nota 1: ")
leia(n1)
escreva("nota 2: ")
leia(n2)
escreval("")

se (n1 <= 10) e (n1 >= 0) e (n2 <= 10) e (n2 >= 0) entao

   media := (n1 + n2)/2

   se (media >= 6) entao
      escreval("Aluno aprovado!")
   senao
      escreval("Aluno REPROVADO!")
   fimse
senao
   escreval("Nota incorreta!")

fimse



fimalgoritmo
