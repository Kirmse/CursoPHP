algoritmo "semnome"


var

a1, a2, media: real

resp : caractere
inicio
repita
   repita

      escreva("Digite a nota 1: ")
      leia(a1)
      escreva("Digite a nota 2: ")

      leia(a2)
      se (a1 >= 0) e (a1 <= 10) e (a2 >= 0) e (a2 <= 10) entao
      senao
         escreval("Notas inv�lidas")
      fimse

   ate (a1 >= 0) e (a1 <= 10) e (a2 >= 0) e (a2 <= 10)

   media := (a1 + a2)/2

   escreval("")
   escreval("Sua m�dia � de:",media)

   escreval("Novo c�lculo(S/N)?")
   leia(resp)
ate (resp <> "S")

fimalgoritmo
