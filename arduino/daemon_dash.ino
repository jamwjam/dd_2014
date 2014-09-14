#include <SoftwareSerial.h>

int serialIn = 0;  //rx
int serialOut = 1; //tx
int piInput = 4;  //Digital pin
//int piOutput = 3; //Digital pin?
unsigned int tempVal = 0;
uint8_t currVal = 0;  //current sensor output
uint8_t avg = 0;
int i = 0;

//unsigned int buf[250];
SoftwareSerial mySerial(serialIn, serialOut);

void setup(){
    //pinMode(serialIn, INPUT);
    //pinMode(serialOut, OUTPUT);
    pinMode(piInput, INPUT);
    //pinMode(piOutput, OUTPUT);
    pinMode(A0, INPUT); 
    Serial.begin(9600);  //baud rate 
    mySerial.begin(9600); //baud rate
}

void read_write_loop(){
   while(1){
      //i = 0;
      //unsigned int total = 0;
      
      //while (i < 200){
        //delay(5);
        //read from sensor
        tempVal = analogRead(A0); //scale to 1 byte
        currVal = (uint8_t) (tempVal>>2);
        
        //total += currVal;
        //i++;
      //}
      
      delay(5);
      /*DEBUG*/
      //avg = (uint8_t) (total/(i/2));
      //Serial.println(currVal);
      Serial.write(currVal);
      /*END DEBUG*/
      
      //write to pin for pi
      //mySerial.write(0x41);    //currVal  
   } 
}

/*
  Wait for pi to request data
*/
void loop(){
  while(1){
     //read from pi request pin
     //if(mySerial.read() == 1){
     //if(digitalRead(piInput) == HIGH){  
       //if request is made
       read_write_loop();
     //}
  }
}
