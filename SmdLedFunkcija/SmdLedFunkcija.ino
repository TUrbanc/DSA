
void setup() {

  pinMode(10, OUTPUT);
  pinMode(11, OUTPUT);
  pinMode(12, OUTPUT);

}

void posljiPodatek(char podatek){

  digitalWrite(10, LOW);
  digitalWrite(11, LOW);
  digitalWrite(12, LOW);

  for(int i = 0; i < 8; i++){
    if(podatek & B00000001){
      digitalWrite(12, HIGH);
    }
      else{
        digitalWrite(12, LOW);
      }
      digitalWrite(10, HIGH);
      digitalWrite(10, LOW);
      podatek = podatek >> 1;
    }   
  digitalWrite(11, HIGH);
  digitalWrite(11, LOW);
}

// the loop function runs over and over again forever
void loop() {
 
  posljiPodatek(B10101010);
  
  delay(500);


}
