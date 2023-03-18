algoritmo "Ex.27"

var

n1, n2, n3, temp : inteiro

inicio
escreva("Número 1: ")
leia(n1)
escreva("Número 2: ")
leia(n2)
escreva("Número 3: ")
leia(n3)


se (n3 < n2) entao

   temp := n3
   n3 := n2
   n2 := temp
fimse

se (n2 < n1) entao

   temp := n2
   n2 := n1
   n1:= temp
fimse


se (n2 > n3) entao

   temp := n2
   n2 := n3
   n3:= temp
fimse

escreval("")
escreval("Núemro maior é o:",n3)



// 9 4 1
//


fimalgoritmo
