algoritmo "semnome"

var
// a = x    b = y   c= z
a ,b ,c ,x ,y ,z : real
inicio

escreval("Os pares de instru��es abaixo produzem o mesmo resultado?")
escreval("A = (4/2)+(2/4) e A = 4/2+2/4")
escreval("")

a := (4/2)+(2/4)
x := 4/2+2/4

se (a = x) entao
   escreval("A � igual ao A")
senao
   escreval("A n�o � igual ao A")
fimse

escreval("")
escreval("B = 4/(2+2)/4 e B = 4/2+2/4")
escreval("")

b := 4/(2+2)/4
y := 4/2+2/4

se (b = y) entao
   escreval("B � igual ao B")
senao
   escreval("B n�o � igual ao B")
fimse

escreval("")
escreval("C (4+2)*2-4 e C 4+2*2-4")
escreval("")

c := (4+2)*2-4
z := 4+2*2-4

se (c = z) entao
   escreval("C � igual ao C")
senao
   escreval("C n�o � igual ao C")
fimse

fimalgoritmo
