<script>
//accepts text input and
var word = prompt("Enter the word");

while(word == ''){
    var word = prompt("Invalid , please enter the word");
}

//check if a word begins with a vowel
var vowels = 'aeiou';
console.log(vowels.indexOf(word[0]))
if(vowels.indexOf(word[0])>-1){
    //first letter vowel
    //translate
    var pigLatin = word + 'way' + ' (first letter vowel)';
    
    
}else if(vowels.indexOf(word[1])<0){
    //second letter vowel
    //translate
    var pigLatin = word.slice(2) + word.slice(0,1) + word.slice(1,2) + 'ay' + ' (second letter a consonant)';
    
} else{
    //default
    //translate
    var pigLatin = word.slice(1) + word.slice(0,1) + 'ay' + ' (resultB)';
         }

//If the user enters nothing or a single-letter word, your program should //print a message that the input can't be translated.
</script>
<p id="word"></p>

<script>
document.write(pigLatin);
</script>
