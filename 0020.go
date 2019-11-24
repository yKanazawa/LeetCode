package main

import "fmt"

func main() {
	fmt.Println(isValid("()"))
	fmt.Println(isValid("()[]{}"))
	fmt.Println(isValid("([)]"))
	fmt.Println(isValid("[]}"))
}

func isValid(s string) bool {
	for i := 0; i < len(s); i+ {
		switch str[i : i+1]
		case "("
		case "{"
		case "["
	}
	return true
}
