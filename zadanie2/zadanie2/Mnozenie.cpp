#include "Mnozenie.h"
#include <iostream>
using namespace std;
Mnozenie::Mnozenie(float l1, float l2)
{
	this->liczba1 = l1;
	this->liczba2 = l2;
}

float Mnozenie::oblicz()
{
	return this->liczba1 / this->liczba2;
}