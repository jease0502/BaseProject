#include "../src/main.h"
#include <assert.h>

void testGetTriangleType() {
    assert(getTriangleType(3, 4, 5) == 0);
    assert(jease(5, 2) == 3);
}

int main() {
    assert(addNumber(5, 2) == 7);
    testGetTriangleType();
    return 0;
}
