algoritmo "semnome"

var
total, vb, vv, vn : inteiro
pb, pv, pn : real
inicio

escreva("Número de votos brancos: ")
leia(vb)
escreval("") }
escreva("Número de votos válidos: ")
leia(vv)
escreval("")
escreva("Número de votos nulos: ")
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
escreval("votos em válidos:",pv,"%")
escreval("")

total := int(pn + pb + pv)
escreval("total: ",total,"%")

fimalgoritmo
