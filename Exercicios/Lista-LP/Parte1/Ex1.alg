algoritmo "Ex1"
// Escreva um algoritmo que armazene o valor 10 em uma vari�vel A e o valor 20 em uma vari�vel B.
// A seguir (utilizando apenas atribui��es entre vari�veis) troque os seus conte�dos fazendo com que o
// valor que est� em A passe para B e vice-versa. Ao final, escrever os valores que ficaram armazenados
// nas vari�veis.
var
a, b ,temp : inteiro

inicio
a := 10
b := 20

escreval("valor de A = ",a)
escreval("valor de B = ",b)
// a = 10
// b = 20
// pra a ter o valor de b, algo tem q armazenar o valor de a

temp := a
a := b
b := temp
escreval("")
escreval("invertendo os valores ficam:")
escreval("")
escreval("valor de A = ",a)
escreval("valor de B = ",b)
fimalgoritmo
