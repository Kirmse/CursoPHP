algoritmo "semnome"


var
ano, idade : inteiro

inicio
// 16 e 17 tem a op��o de votar
//18 e 64 � obrigat�rio
//65 n�o � opcional


escreval("-------ANO DE ELEI��O-------")
escreva("Coloque o ano de nascimento: ")
leia(ano)

se (ano >= 1908) e (ano <= 2023) entao

   idade :=  2023 - ano

   escreval("idade:",idade)

   se (idade >= 18) e (idade < 65) entao
      escreval("Obrigat�rio votar")
   fimse

   se (idade >= 16) e (idade <= 17) ou (idade >= 65) entao
      escreval("Opcional votar")
   fimse

   se (idade <= 15) entao
      escreval("voce n�o pode votar")
   fimse

senao
   escreval("Data inv�lida")
fimse

fimalgoritmo

