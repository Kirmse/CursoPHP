algoritmo "semnome"

var
qnt, maca : real

inicio
escreval("Quantas ma��s vc quer comprar?")
escreva("quantidade: ")
leia(qnt)
escreval("")

se (qnt >= 12) entao
   maca := 1 * qnt
   escreval("pre�o total � de:",maca)
senao
   maca := 1.30 * qnt
   escreval("pre�o total � de:",maca)
fimse




fimalgoritmo
