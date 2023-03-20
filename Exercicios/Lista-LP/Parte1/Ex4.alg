algoritmo "ex4"

var
a ,b : real
inicio

escreval("Reescreva as instruções abaixo com o mínimo de parênteses possível, mas sem alterar o resultado:")
escreval("")
// A
a := 6*(3+2)
escreval("a = ",a)
escreval("(a)não é prossivel a alteração")
escreval("")

// B
b := 2+(6*(3+2))
escreval("b = ",b)
b := 2+6*(3+2)
escreval("b = ",b)
escreval("")

// C
a := 2+(3*6)/(2+4)
escreval("c = ",a)
a := 2+3*6/(2+4)
escreval("c = ",a)
escreval("")

// D
b := 2*(8/(3+1))
escreval("d = ",b)
b := 2*8/(3+1)
escreval("d = ",b)
escreval("")

// E
a := 3+(16-2)/(2*(9-2))
escreval("e = ",a)
a := 3+(16-2)/(2*(9-2))
escreval("(e) não é prossivel a alteração")
escreval("")

// F
b := (6/3)+(8/2)
escreval("f = ",b)
b := 6/3+8/2
escreval("f = ",b)
escreval("")

// G
a := ((3+(8/2))*4)+(3*2)
escreval("g = ",a)
a := ((3+8/2)*4)+3*2
escreval("g = ",a)
escreval("")

// H
b := ((6*(3*3)+6)-10)
escreval("h = ",b)
b := 6*(3*3)+6-10
escreval("h = ",b)
escreval("")

// I
a := (((10*8)+3)*9)
escreval("i = ",a)
a := (10*8+3)*9
escreval("i = ",a)
escreval("")

// J
b := ((-12)*(-4))+(3*(-4))
escreval("j = ",b)
b := (-12)*(-4)+3*(-4)
escreval("j = ",b)

fimalgoritmo
