algoritmo "semnome"


var
ano, idade : inteiro

inicio
// 16 e 17 tem a opção de votar
//18 e 64 é obrigatório
//65 não é opcional


escreval("-------ANO DE ELEIÇÃO-------")
escreva("Coloque o ano de nascimento: ")
leia(ano)

se (ano >= 1908) e (ano <= 2023) entao

   idade :=  2023 - ano

   escreval("idade:",idade)

   se (idade >= 18) e (idade < 65) entao
      escreval("Obrigatório votar")
   fimse

   se (idade >= 16) e (idade <= 17) ou (idade >= 65) entao
      escreval("Opcional votar")
   fimse

   se (idade <= 15) entao
      escreval("voce não pode votar")
   fimse

senao
   escreval("Data inválida")
fimse

fimalgoritmo

