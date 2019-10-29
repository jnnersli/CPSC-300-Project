from http.server import BaseHTTPRequestHandler, HTTPServer
import socketserver
import cgi

class MyServer(BaseHTTPRequestHandler):
	def do_POST(self):#this happens on all pages which are not
						#the first page
		self.send_response(200)#this is the accepting response
		self.send_header('Content-type','text/html')
		self.end_headers()
		print(self.path)
		d = open(self.path[1:],'r')
		dile_contents = d.read()#this line and the two above take the path
								#and removes the "/" so we may use it
		self.wfile.write(bytes(dile_contents,"utf-8"))#opens specified html
		
		print("posted")


		return
	def do_GET(self):#this happens on the first page
		self.send_response(200)
		self.send_header('Content-type','text/html')
		self.end_headers()
		f=open('index.html','r')
		file_contents = f.read()
		self.wfile.write(bytes(file_contents,"utf-8"))
		print("getted")
		print(self.path)
		return

def main():
	port = 8000#the main activates the server on the port
	server= HTTPServer(('',port),MyServer)
	server.serve_forever()#basically a while true


if __name__ == '__main__':
	main()