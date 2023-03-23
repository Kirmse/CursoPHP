algoritmo "semnome"

var

tarefa : vetor[1..10] de caractere
posicao, c : inteiro
operacao: caractere
inicio

enquanto (operacao <> "S") faca
   escreval("'L' para Listar / 'E' para Editar / 'S' para Sair")
   leia(operacao)

   escolha operacao

   caso "E"
      limpatela
      escreva("Digite a posição: ")
      leia(posicao)
      escreva("Digite a tarefa: ")
      leia(tarefa[posicao])
   caso "L"
      limpatela
      para c de 1 ate 10 faca
         escreval(c," - ", tarefa[c])
      fimpara
   fimescolha
fimenquanto

fimalgoritmo
