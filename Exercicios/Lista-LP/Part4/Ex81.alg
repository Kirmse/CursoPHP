algoritmo "semnome"

Var
Q: vetor[1..20] de inteiro
menorelemento, posicaomenor: inteiro
i: inteiro

Inicio
Para i de 1 ate 20 faca
   Escreva("Digite um n�mero positivo para a posi��o ", i, ": ")
   Leia(Q[i])
   Enquanto Q[i] < 0 faca
      Escreva("Digite um n�mero positivo para a posi��o ", i, ": ")
      Leia(Q[i])
   FimEnquanto
FimPara

menorelemento := Q[1]
posicaomenor := 1

para i de 2 ate 20 faca
   se Q[i] < menorelemento entao
      menorelemento := Q[i]
      posicaomenor := i
   fimse
fimpara

Escreval("O menor valor de Q �: ", menorelemento)
Escreva("Ele ocorre na posi��o: ", posicaomenor)

fimalgoritmo
