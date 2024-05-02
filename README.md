PHP - OOP 1
===
Creare un file `index.php` in cui:
- è definita una **classe ‘Movie’**
   => all’interno della classe sono dichiarate delle **variabili d’istanza**
   => all’interno della classe è definito **un costruttore**
   => all’interno della classe è definito almeno **un metodo**
- vengono **istanziati almeno due oggetti ‘Movie’** e stampati a schermo i valori delle relative proprietà
**Bonus 1:**
Modificare la classe Movie in modo che accetti piú di un genere.
**Bonus 2:**
Creare un layout completo per stampare a schermo una lista di movies.

**Svolgimento**
- Creare una classe Movie, per comodità in un file php interno a una cartella contenitore
- Definire le caratteristiche della classe (variabili)
- Creare un costruttore che permetta di inizializzare una nuova istanza della classe, passandogli le necessarie variabili d'istanza
- Includere la classe in questione nel file index tramite "require once"
- Dichiarare un'istanza
- Stampare l'istanza tramite funzione basilare precedentemente dichiarata nella classe