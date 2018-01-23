# Acronymes

Le but est de convertir un sigle non abbrégé en sa version abbrégée (majuscules séparées par des points). Exemple : ‘Wild Code School’ => ‘W.C.S.’
 
Dans un second temps, ajouter un 1er cas particulier
Société Nationale du Chemin de Fer Français doit donner ‘S.N.C.F.’ et non ‘S.N.D.C.D.F.F’
Tandis que 
‘Electricité de France’ doit bien donner ‘E.D.F.’
 
Puis un autre cas particulier
‘World Wide Web Consortium’ => W.3.C. (et les autres sigles fonctionnent bien entendu toujours comme attendus)

 ```php
  $this->assertEquals('W.C.S.', Acronyms::testAcronym('Wild Code School'));        
  $this->assertEquals('E.D.F.',Achronymes::testAchronyme('Electricite de France'));
  $this->assertEquals('S.N.C.F.',Achronymes::testAchronyme('Société Nationale du Chemin de Fer Français'));
  $this->assertEquals('W.3.C.',Achronymes::testAchronyme('World Wide Web Consortium'));
```
   