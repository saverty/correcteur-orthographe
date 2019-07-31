
#  Correcteur orthographique 

## A propos

Vérifie le nombre de fautes d'orthographe dans une phrase et propose des corrections. Disponible en Français. 

## Installation

* Installation via composer : `composer require ... `

## Usage

### Récupérer le nombre de fautes 

    use Saverty\LanguageCorrector\LanguageCorrector;

	$languageCorrector = new LanguageCorrector('Ceci est un test', 'fr');
	
	echo $languageCorrector->numberOfErrors(); //"0"
	

### Récupérer les suggestions de correction

    use Saverty\LanguageCorrector\LanguageCorrector;

	$languageCorrector = new LanguageCorrector('Ceci est un test', 'fr');
	
	echo $languageCorrector->suggestions();
	
  

 - [https://steveaverty.fr](https://steveaverty.fr)
 - [Linkedin](https://www.linkedin.com/in/steve-averty-64808a62/)
 - [Twitter](https://twitter.com/steveaverty)
