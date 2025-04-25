const { calculate } = require('../public/calculator');

test('addition', () => {
  expect(calculate('2+3')).toBe(5);
});
test('soustraction', () => {
  expect(calculate('5-3')).toBe(2);
});
test('multiplication', () => {
  expect(calculate('4*3')).toBe(12);
});
test('division', () => {
  expect(calculate('10/2')).toBe(5);
});
test('priorité opérateurs', () => {
  expect(calculate('2+3*4')).toBe(14);
});
test('parenthèses', () => {
  expect(calculate('(2+3)*4')).toBe(20);
});
test('expression invalide', () => {
  expect(() => calculate('2+bad')).toThrow('Expression invalide');
});
test('chaîne vide', () => {
  expect(() => calculate('')).toThrow('Expression invalide');
});
