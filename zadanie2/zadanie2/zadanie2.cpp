#include <iostream>
#include "Dodawanie.h"
#include "Odejmowanie.h"
using namespace std;


int main()
{
	setlocale(LC_ALL, "");
	float l1, l2;
	string wybor;
	cout << "Podaj rodzaj obliczenia: "; cin >> wybor;
	if (wybor == "dodawanie")
	{
		cout << "Podaj liczbe pierwszą: "; cin >> l1;
		cout << "Podaj liczbe drógą: "; cin >> l2;
		Dodawanie dodawanie = Dodawanie(l1, l2);
		cout << "Wynik dodawanie: " << dodawanie.oblicz() << endl;
	}
	else if (wybor == "odejmowanie")
	{
		cout << "Podaj liczbe pierwszą: "; cin >> l1;
		cout << "Podaj liczbe drógą: "; cin >> l2;
		Odejmowanie odejmowanie = Odejmowanie(l1, l2);
		cout << "Wynik odejmowania: " << odejmowanie.oblicz() << endl;
	}
	else
	{
		cout << "Nie ma takiego rodzaju obliczenia" << endl;
	}
	

	

	return EXIT_SUCCESS;
}