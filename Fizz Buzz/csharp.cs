using System;
namespace FizzBuzz
{
public class FizzBuzz
{
static void Main()
{for(int i=1;i<101;i++)Console.WriteLine("{0:#;}{1:;;Fizz}{2:;;Buzz}",i%3*i%5==0?0:i,i%3,i%5);}
}
}
