algoritmo "semnome"

var
total, vb, vv, vn : inteiro
pb, pv, pn : real
inicio

escreva("N�mero de votos brancos: ")
leia(vb)
escreval("") }
escreva("N�mero de votos v�lidos: ")
leia(vv)
escreval("")
escreva("N�mero de votos nulos: ")
leia(vn)
escreval("")
escreval("")

total := vb + vn + vv

pb := vb * 100 / total
pb := int(pb)

pv := vv * 100 / total
pv := int(pv)

pn := vn * 100 / total
pn := int(pn)

escreval("Total de votos: ",total)
escreval("")
escreval("votos em branco:",pb,"%")
escreval("votos em nulos:",pn,"%")
escreval("votos em v�lidos:",pv,"%")
escreval("")

total := int(pn + pb + pv)
escreval("total: ",total,"%")

fimalgoritmo
