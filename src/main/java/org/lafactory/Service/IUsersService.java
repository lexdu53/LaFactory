package org.lafactory.Service;

import org.lafactory.entities.Users;

public interface IUsersService {
	public Users getUser(int id);
	public void setUser(Users user);
	public int delUser(int id);
	
}
