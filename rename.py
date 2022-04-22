
import os
import sys
def main():
    for filename in os.listdir('.'):
        if filename.endswith('.html'):
            new_name = filename.replace('.html', '.php')
            os.rename(filename, new_name)

if __name__ == '__main__':
    main()